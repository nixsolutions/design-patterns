<?php

namespace DesignPatterns\Behavioral\Mediator;

class Mediator
{

    private $server;
    private $database;
    private $client;

    public function __construct(Database $database, Client $client, Server $server)
    {
        $this->database = $database;
        $this->server = $server;
        $this->client = $client;

        $this->database->setMediator($this);
        $this->server->setMediator($this);
        $this->client->setMediator($this);
    }

    public function makeRequest()
    {
        $this->server->process();
    }

    public function queryDb(): string
    {
        return $this->database->getData();
    }

    public function sendResponse($content)
    {
        $this->client->output($content);
    }
}
