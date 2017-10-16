<?php
namespace Album\Model;

class Album
{
    public $id;
    public $artist;
    public $title;

    /**
     * @param $data
     */
    public function exchangeArray($data)
    {
        $this->id     = (isset($data['id'])) ? $data['id'] : null;
        $this->artist = (isset($data['artist'])) ? $data['artist'] : null;
        $this->title  = (isset($data['title'])) ? $data['title'] : null;
    }
}