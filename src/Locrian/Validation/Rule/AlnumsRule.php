<?php

    /**
     * * * * * * * * * * * * * * * * * * * *
     *        Locrian Framework            *
     * * * * * * * * * * * * * * * * * * * *
     *                                     *
     * Author  : Özgür Senekci             *
     *                                     *
     * Skype   :  socialinf                *
     *                                     *
     * License : The MIT License (MIT)     *
     *                                     *
     * * * * * * * * * * * * * * * * * * * *
     */

    namespace Locrian\Validation\Rule;

    use Locrian\Validation\Rule;

    class AlnumsRule extends Rule{

        /**
         * @param $target string
         * @param $args array
         *
         * @return bool
         */
        public function validate($target, $args){
            if( is_string($target) ){
                return preg_match("/^[a-zA-Z0-9ğĞüÜşŞöÖçÇıİ]+$/u", $target);
            }
            else{
                return false;
            }
        }

    }