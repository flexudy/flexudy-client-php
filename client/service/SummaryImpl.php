<?php


namespace FlexudyClient\client\service;


class SummaryImpl implements Summary
{

    const FLEXUDY_SUMMARY_URI = "/api/v2/summary/generate";

    public function get_summary($inputText)
    {
        $requestParameters = [
        ];
    }
}