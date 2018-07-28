<?php

use TMFiles\Time\{
    Created  as Created,
    Modified as Modified
};

class TMFile
{
    protected $path = null;

    public function __construct(string $path) {
        $this->path = $path;
    }

    /**
     * Returns a new instance of Created class
     *
     * @return TMFiles\Time\Created
     */
    public function created() {
        return new Created($this->path);
    }

    /**
     * Returns a new instance of Modified class
     *
     * @return TMFiles\Time\Modified
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
