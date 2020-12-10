<?php


namespace FlexudyClient\client\service;


interface Summary
{
    /**
     * @param string $inputText The texts that will be used to generate summaries
     * @return array Returns a list of summaries for each document
     */
    public function get_summary($inputText);
}