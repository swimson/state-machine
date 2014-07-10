<?php

namespace StateMachine;

interface StateInterface
{
    /**
     * Get Name
     * @return string
     */
    public function getName();

    /**
     * Add Transition
     * @param string $event
     * @param TransitionInterface $transition
     * @return null
     */
    public function addTransition( $event, TransitionInterface $transition);

    /**
     * Returns an array of Transition objects
     * @return array
     */
    public function getTransitions();
}