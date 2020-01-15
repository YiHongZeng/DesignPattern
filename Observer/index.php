<?php
/**
 * 观察者模式
 */

interface Observer
{
    public function update();
}

class Wechat implements Observer
{
    public function update()
    {
        echo 'Wechat : update'.'<br/>';
    }
}

class Web implements Observer
{
    public function update()
    {
        echo 'Web : update'.'<br/>';
    }
}

class App implements Observer
{
    public function update()
    {
        echo 'App : update'.'<br/>';
    }
}

/**
 * 主题接口，定义添加观察者和广播通知的方法
 * Interface Subject
 */
abstract class Subject
{
    private $observers = [];

    /**
     * 添加观察者
     * @param $key
     * @param Observer $observer
     * @return mixed
     */
    public function addObserver(Observer $observer)
    {
        $this->observers[] = $observer;
    }

    /**
     * 移除观察者
     * @param $key
     * @return mixed
     */
    public function removeObserver(Observer $observer)
    {
        $key = array_search($observer, $this->observers);
        if ($observer === $this->observers[$key]) {
            unset($this->observers[$key]);
        }
    }

    /**
     * 通知
     * @return mixed
     */
    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update();
        }
    }
}

/**
 * 实现
 * Class Event
 */
class Event extends Subject
{
    public function publish()
    {
        $this->notify();
    }
}


$wechat = new Wechat();
$web = new Web();
$app = new App();

$event = new Event();
$event->addObserver($wechat);
$event->addObserver($web);
$event->addObserver($app);

$event->publish();