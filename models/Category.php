<?php

namespace app\models;
use yii\helpers\ArrayHelper;
use yii\db\ActiveRecord;
use Yii;

class Category extends ActiveRecord {
    public static function tableName() {
        return "{{%category}}";// {{%}}代表表前缀
    }

    public function attributeLabels() {
        return [
            'parentid' => '上级分类',
            'catename' => '分类名称'
        ];
    }

    public function rules() {
        return [
          ['parentid','required','message' => '上级分类不能为空','on' => 'addCate'],
          ['catename','required','message' => '标题名称不能为空','on' => 'addCate'],
          ['catename','unique','message' => '标题名称不能重复','on' => 'addCate'],
          ['createtime','safe','on' => 'addCate']

        ];
    }

    public function add($data) {
        $this->scenario = 'addCate';
        $data['Category']['createtime'] = time();
        if($this->load($data) && $this->save()) {
            return true;
        }
        return false;
    }

    public function getData() {
        $cates = self::find()->all(); //拿出来是对象
        $cates = ArrayHelper::toArray($cates);
        return $cates;
    }

    public function getTree($cates, $pid = 0) {
        $tree = [];
        foreach($cates as $cate) {
            if($cate['parentid'] == $pid) {
                $tree[] = $cate;
                $tree = array_merge($tree,$this->getTree($cates,$cate['cateid']));
            }
        }
        return $tree;
    }

    public function setPrefix($data,$p = "|-----") {
        $tree = [];
        $num = 1;
        $prefix = [0 => 1];
        while($val = current($data)) {
            $key = key($data);
            if($key > 0) {
                if($data[$key - 1]['parentid'] != $val['parentid']) {
                    $num ++;
                }
            }
            if(array_key_exists($val['parentid'], $prefix)) {
                $num = $prefix[$val['parentid']];
            }
            $val['catename'] = str_repeat($p,$num).$val['catename'];
            $prefix[$val['parentid']] = $num;
            $tree[] = $val;
            next($data);
        }
        return $tree;
    }

    public function getOptions($options=['添加顶级分类']) {
        $data = $this->getData();
        $tree = $this->getTree($data);
        $tree = $this->setPrefix($tree);
        foreach($tree as $cate) {
            $options[$cate['cateid']] = $cate['catename'];
        }
        return $options;
    }

    public function getTreeList() {
        $data = $this->getData();
        $tree = $this->getTree($data);
        return $tree = $this->setPrefix($tree);
    }
}
