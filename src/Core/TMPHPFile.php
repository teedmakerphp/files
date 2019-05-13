<?php

use TMPHP\Files\Time\{
    Created  as Created,
    Modified as Modified
};

class TMPHPFile
{
    protected $path    = null;
    protected $content = null;

    public function __construct(string $path) {
        $this->path = $path;
    }

    /**
     * Saves the actual content in this file
     *
     * @param string $content
     * @return void
     */
    public function save(string $content=null) {
        $this->content = $content;
        $this->createDirectory($this->path);
        return file_put_contents($this->path, $this->content);
    }

    /**
     * Increments content to this file
     *
     * @param string $content
     * @return void
     */
    public function increments(string $content) {
        $this->content = $content;
        $this->createDirectory($this->path);
        return file_put_contents($this->path, $content, FILE_APPEND);
    }

    /**
     * Return all lines
     *
     * @return void
     */
    public function getLines() {
        try {
            return fopen($this->path, 'r');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function getContent() {
        try {
            return file_get_contents($this->path);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Deletes this file
     *
     * @return void
     */
    public function delete() {
        $response      = unlink($this->path);
        $this->path    = null;
        $this->content = null;
        return $response;
    }

    /**
     * Creates an directory
     *
     * @param string $path
     * @param boolean $recursive
     * @return void
     */
    public function createDirectory(string $path, bool $recursive=true) {
        if(!is_dir($path) and !file_exists($path)) {
            return mkdir($path, 0777, $recursive);
        }
        return null;
    }

    /**
     * Returns a new instance of Created class
     *
     * @return TMPHP\Files\Time\Created
     */
    public function created() {
        return new Created($this->path);
    }

    /**
     * Returns a new instance of Modified class
     *
     * @return TMPHP\Files\Time\Modified
     */
    public function modified() {
        return new Modified($this->path);
    }

    /**
     * Gets file modification time
     *
     * @return void
     */
    public function getMTime() {
        if (!file_exists($this->path)) {
            return false;
        }
        return filemtime($this->path);
    }

    /**
     * Gets file creation time
     *
     * @return void
     */
    public function getCTime() {
        if (!file_exists($this->path)) {
            return false;
        }
        return filectime($this->path);
    }
}
