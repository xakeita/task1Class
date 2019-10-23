<?php

class Judge
{
    private $number;

    private static $state = false; //入力されているかを判定する

    public function __construct($number)
    {
        self::$state = true; //プロパティに代入
        $this->number = $number;
    }

    public function isPrimary():bool
    {
        //素数判定のメソッド
        $num = $this->number;
        if ($num <= 1) {
            //1以下は素数ではない
            return false;
        } elseif ($num === 2) {
            //2の時は素数である
        } else {
            //約数があるかを確認
            for ($i = 2; $i < $num; $i++) {
                if ($num % $i === 0) {
                    return false;
                }
            }
        }
        //if文に掛からなかったら素数
        return true;

    }

    public static function getState():bool
    {
        return self::$state;
    }

}
