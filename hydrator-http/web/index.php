<?php
require_once __DIR__ . '/../vendor/autoload.php';

$app = new Silex\Application();

$headers = array(
  'Content-Type' => 'application/json',
  'Accept' => 'application/json'
);

$request = new Zend\Http\Request();
$request->getHeaders()->addHeaders($headers);

$client = new Zend\Http\Client();
$client->setOptions(['useragent' => 'Collabotron']);

$hydrator = new \Zend\Stdlib\Hydrator\ClassMethods();

function renderCollaborator(Collaborator $collab) {
    $html  = "<tr>";
    $html .= '<td>' . $collab->getLogin() . '</td>';
    $html .= sprintf('<td><img src="%s" /></td>', $collab->getAvatarUrl());
    return $html . '</tr>';
}

$app->get('/{owner}/{repo}', function($owner, $repo) use ($headers, $request, $client, $hydrator) {
    $request->setUri("https://api.github.com/repos/$owner/$repo/collaborators");
    $response = $client->dispatch($request);
    $collaborators = json_decode($response->getBody(), true);
    $html  = "<h1>Collaborators on $repo</h1><br>";
    $html .= "<table>";
    //loop through the json array and turn each array into an actual object
    foreach ($collaborators as $collaborator)
        $html .= renderCollaborator($hydrator->hydrate($collaborator, new Collaborator()));
    return $html . "</table>";
});

$app->run();