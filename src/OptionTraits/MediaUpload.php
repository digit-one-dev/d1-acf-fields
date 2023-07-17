<?php

namespace DigitOne\Acf\OptionTraits;


trait MediaUpload {
    /**
     * @param mixed $media_upload
     *
     * @return self the updated instance
     */
    public function media_upload(mixed $media_upload): self
    {
        $this->set_media_upload($media_upload);

        return $this;
    }

    /**
     * @param mixed $media_upload
     */
    public function set_media_upload(mixed $media_upload)
    {
        $this->args['media_upload'] = $media_upload;
    }

    /**
     * @return mixed
     */
    public function get_media_upload(): mixed
    {
        if (array_key_exists('media_upload', $this->args)) {
            return $this->args['media_upload'];
        }
        
        return [];
    }

    public function add_media_upload($key, $value)
    {
        if (array_key_exists('media_upload', $this->args)) {
            $this->args['media_upload'][$key] = $value;
            return $this;
        }

        $this->args['media_upload'] = [
            $key => $value
        ];

        return $this;
    }
}