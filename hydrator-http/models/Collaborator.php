<?php
class Collaborator
{
	private $login;
	private $id;
	private $avatarUrl;
	private $gravatarId;
	private $url;
	private $htmlUrl;
	private $followersUrl;
	private $followingUrl;
	private $gistsUrl;
	private $startedUrl;
	private $subscriptionsUrl;
	private $organizationsUrl;
	private $reposUrl;
	private $eventsUrl;
	private $receivedEventsUrl;
	private $type;
	private $siteAdmin;

    /**
     * @param mixed $avatarUrl
     */
    public function setAvatarUrl($avatarUrl)
    {
        $this->avatarUrl = $avatarUrl;
    }

    /**
     * @return mixed
     */
    public function getAvatarUrl()
    {
        return $this->avatarUrl;
    }

    /**
     * @param mixed $eventsUrl
     */
    public function setEventsUrl($eventsUrl)
    {
        $this->eventsUrl = $eventsUrl;
    }

    /**
     * @return mixed
     */
    public function getEventsUrl()
    {
        return $this->eventsUrl;
    }

    /**
     * @param mixed $followersUrl
     */
    public function setFollowersUrl($followersUrl)
    {
        $this->followersUrl = $followersUrl;
    }

    /**
     * @return mixed
     */
    public function getFollowersUrl()
    {
        return $this->followersUrl;
    }

    /**
     * @param mixed $followingUrl
     */
    public function setFollowingUrl($followingUrl)
    {
        $this->followingUrl = $followingUrl;
    }

    /**
     * @return mixed
     */
    public function getFollowingUrl()
    {
        return $this->followingUrl;
    }

    /**
     * @param mixed $gistsUrl
     */
    public function setGistsUrl($gistsUrl)
    {
        $this->gistsUrl = $gistsUrl;
    }

    /**
     * @return mixed
     */
    public function getGistsUrl()
    {
        return $this->gistsUrl;
    }

    /**
     * @param mixed $gravatarId
     */
    public function setGravatarId($gravatarId)
    {
        $this->gravatarId = $gravatarId;
    }

    /**
     * @return mixed
     */
    public function getGravatarId()
    {
        return $this->gravatarId;
    }

    /**
     * @param mixed $htmlUrl
     */
    public function setHtmlUrl($htmlUrl)
    {
        $this->htmlUrl = $htmlUrl;
    }

    /**
     * @return mixed
     */
    public function getHtmlUrl()
    {
        return $this->htmlUrl;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $login
     */
    public function setLogin($login)
    {
        $this->login = $login;
    }

    /**
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param mixed $organizationsUrl
     */
    public function setOrganizationsUrl($organizationsUrl)
    {
        $this->organizationsUrl = $organizationsUrl;
    }

    /**
     * @return mixed
     */
    public function getOrganizationsUrl()
    {
        return $this->organizationsUrl;
    }

    /**
     * @param mixed $receivedEventsUrl
     */
    public function setReceivedEventsUrl($receivedEventsUrl)
    {
        $this->receivedEventsUrl = $receivedEventsUrl;
    }

    /**
     * @return mixed
     */
    public function getReceivedEventsUrl()
    {
        return $this->receivedEventsUrl;
    }

    /**
     * @param mixed $reposUrl
     */
    public function setReposUrl($reposUrl)
    {
        $this->reposUrl = $reposUrl;
    }

    /**
     * @return mixed
     */
    public function getReposUrl()
    {
        return $this->reposUrl;
    }

    /**
     * @param mixed $siteAdmin
     */
    public function setSiteAdmin($siteAdmin)
    {
        $this->siteAdmin = $siteAdmin;
    }

    /**
     * @return mixed
     */
    public function getSiteAdmin()
    {
        return $this->siteAdmin;
    }

    /**
     * @param mixed $startedUrl
     */
    public function setStartedUrl($startedUrl)
    {
        $this->startedUrl = $startedUrl;
    }

    /**
     * @return mixed
     */
    public function getStartedUrl()
    {
        return $this->startedUrl;
    }

    /**
     * @param mixed $subscriptionsUrl
     */
    public function setSubscriptionsUrl($subscriptionsUrl)
    {
        $this->subscriptionsUrl = $subscriptionsUrl;
    }

    /**
     * @return mixed
     */
    public function getSubscriptionsUrl()
    {
        return $this->subscriptionsUrl;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }
}