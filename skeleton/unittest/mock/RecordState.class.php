<?php

/* This class is part of the XP framework
 *
 * $Id$
 */

  uses('unittest.mock.IMockState',
       'unittest.mock.MethodOptions');

  /**
   * TBD
   *
   * @purpose 
   */
  class RecordState extends Object implements IMockState {
    /**
     * Records the call as expectation and returns the mehtod options object.
     *
     * @param   string method the method name
     * @param   var* args an array of arguments
     * @return  var
     */
    public function handleInvocation($method, $args) {
      return new MethodOptions();
    }
  }
