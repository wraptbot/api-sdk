<?php

use Illuminate\Support\Facades\Http;

class Api
{
    protected string $apiPasswdPhrase;
    protected string $apiUrl;

    public function __construct()
    {
        $this->apiUrl = "https://api.wrapt.bot";
    }

    public function hasApiPasswordPhrase(): bool
    {
        return is_null($this->apiPasswdPhrase);
    }

    public function setApiPhrase(string $apiPasswdPhrase): void
    {
        $this->apiPasswdPhrase = $apiPasswdPhrase;
    }

    /**
        users api
     **/

    public function getUsers()
    {
        return $this->submit("getUsers");
    }

    public function getUser()
    {

    }

    public function addUser()
    {

    }

    public function updateUser()
    {

    }

    public function removeUser()
    {

    }

    /**
        bots api
     **/

    public function getBots()
    {

    }

    public function getBot()
    {

    }

    public function addBot()
    {

    }

    public function updateBot()
    {

    }

    public function removeBot()
    {

    }

    /**
        channels api
     **/

    public function getChannels()
    {

    }

    public function getChannel()
    {

    }

    public function addChannel()
    {

    }

    public function updateChannel()
    {

    }

    public function removeChannel()
    {

    }

    /**
        posts api
     **/

    public function getPosts()
    {

    }

    public function getPost()
    {

    }

    public function addPost()
    {

    }

    public function updatePost()
    {

    }

    public function updatePostText()
    {

    }

    public function updatePostCaption()
    {

    }

    public function updatePostPreviewState()
    {

    }

    public function updatePostCommentsState()
    {

    }

    public function updatePostAutoSignature()
    {

    }

    public function removePost()
    {

    }

    /**
        draft api
     **/

    public function getDraft()
    {

    }

    /**
        pending chat join request api
     **/

    public function getPendingChatJoinRequests()
    {

    }

    public function submit(string $method, array $options = array()): mixed
    {
        $headers = array(
            'API-Password-Phrase' => $this->apiPasswdPhrase
        );

        return Http::withHeaders($headers)->post($this->apiUrl."/".$method,$options);
    }
}