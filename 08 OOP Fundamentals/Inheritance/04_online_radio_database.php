<?php
/**
 * Created by PhpStorm.
 * User: apetrov
 * Date: 2/23/2017
 * Time: 10:21 AM
 */

class Song {

    private $artist;
    private $songName;
    private $songLength;
    private $songMinutes;
    private $songSeconds;

    public function __construct(string $artist, string $songName, string $length)
    {

        $this->setArtist($artist);
        $this->setName($songName);
        $this->setLength($length);

    }

    private function setArtist($artist){




    }

    public function getLength(){

        return $this->songLength;
    }


}

class Playlist {

    private $songs = [];
    private $totalLenght;

    public function addSong(Song $song){

        $this->songs[] = $song;
    }

    public function getTotalLenght(){

        foreach ($this->songs as $song) {

            $this->totalLenght += $song->getLength();

        }
        
        return $this->totalLenght;
    }

    public function getSongsCount(){

        return count($this->songs);
    }

}