<?php

namespace RobBrazier\Piwik\Module;

use RobBrazier\Piwik\Repository\RequestRepository;

/**
 * Class EventsModule
 * @package RobBrazier\Piwik\Module
 * @see https://developer.piwik.org/api-reference/reporting-api#Events for arguments
 */
class EventsModule extends Module {

    /**
     * EventsModule constructor.
     * @param RequestRepository $request
     */
    public function __construct($request) {
        parent::__construct($request);
    }

    /**
     * @param array[string]mixed $arguments extra arguments to be passed to the api call
     * @param string $format override format (defaults to one specified in config file)
     * @return mixed
     */
    public function getCategory($arguments = [], $format = null) {
        $options = $this->getOptions($format)->setArguments($arguments);
        return $this->request->send($options);
    }

    /**
     * @param array[string]mixed $arguments extra arguments to be passed to the api call
     * @param string $format override format (defaults to one specified in config file)
     * @return mixed
     */
    public function getAction($arguments = [], $format = null) {
        $options = $this->getOptions($format)->setArguments($arguments);
        return $this->request->send($options);
    }

    /**
     * @param array[string]mixed $arguments extra arguments to be passed to the api call
     * @param string $format override format (defaults to one specified in config file)
     * @return mixed
     */
    public function getName($arguments = [], $format = null) {
        $options = $this->getOptions($format)->setArguments($arguments);
        return $this->request->send($options);
    }

    /**
     * @param array[string]mixed $arguments extra arguments to be passed to the api call
     * @param string $format override format (defaults to one specified in config file)
     * @return mixed
     */
    public function getActionFromCategoryId($arguments = [], $format = null) {
        $options = $this->getOptions($format)->setArguments($arguments);
        return $this->request->send($options);
    }

    /**
     * @param array[string]mixed $arguments extra arguments to be passed to the api call
     * @param string $format override format (defaults to one specified in config file)
     * @return mixed
     */
    public function getNameFromCategoryId($arguments = [], $format = null) {
        $options = $this->getOptions($format)->setArguments($arguments);
        return $this->request->send($options);
    }

    /**
     * @param array[string]mixed $arguments extra arguments to be passed to the api call
     * @param string $format override format (defaults to one specified in config file)
     * @return mixed
     */
    public function getCategoryFromActionId($arguments = [], $format = null) {
        $options = $this->getOptions($format)->setArguments($arguments);
        return $this->request->send($options);
    }

    /**
     * @param array[string]mixed $arguments extra arguments to be passed to the api call
     * @param string $format override format (defaults to one specified in config file)
     * @return mixed
     */
    public function getNameFromActionId($arguments = [], $format = null) {
        $options = $this->getOptions($format)->setArguments($arguments);
        return $this->request->send($options);
    }

    /**
     * @param array[string]mixed $arguments extra arguments to be passed to the api call
     * @param string $format override format (defaults to one specified in config file)
     * @return mixed
     */
    public function getActionFromNameId($arguments = [], $format = null) {
        $options = $this->getOptions($format)->setArguments($arguments);
        return $this->request->send($options);
    }

    /**
     * @param array[string]mixed $arguments extra arguments to be passed to the api call
     * @param string $format override format (defaults to one specified in config file)
     * @return mixed
     */
    public function getCategoryFromNameId($arguments = [], $format = null) {
        $options = $this->getOptions($format)->setArguments($arguments);
        return $this->request->send($options);
    }

}