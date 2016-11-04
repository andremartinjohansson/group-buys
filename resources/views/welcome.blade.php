<?php

// Get announcement data from Group Buys RSS / XML

$xml = simplexml_load_file("http://steamcommunity.com/groups/groupbuys/rss/");

$xTitle = $xml->channel->item[0]->title;
$xDesc = $xml->channel->item[0]->description;

$xDate = $xml->channel->item[0]->pubDate;
$xDate = explode("+", $xDate);
$xDate = $xDate[0];

$xAuthor = $xml->channel->item[0]->author;

?>

@extends('layout')

@section('content')

                    <h2>Save money, buy together!</h2>
                    <div class="front-page text">
                        <p>Sometimes there's a game with an option to buy a 2/3/4-pack.
                        These packs offer you a discount, but most of the time you don't have
                        enough people to justify buying the pack. Do you need those extra
                        people? Then this is the group for you! Find people here who want in
                        on your 'Group Buy' and split the price with them.</p>
                        <p>Group Buys is a community where people help each
                        other getting games for the lowest price as possible.
                        There is not place for personal gain. Keep this in
                        mind while using Group Buys.</p>
                    </div>

                    <figure class="fig-games">
                        <a href="http://steamcommunity.com/groups/groupbuys" target="_blank">
                            <img src="img/logo.jpg" alt="Group Buys logo">
                        </a>
                        <a href="http://steamcommunity.com/groups/groupbuys" target="_blank">
                            <figcaption>The Steam Group</figcaption>
                        </a>
                    </figure>

                    <h3>Latest announcement</h3>
                    <article>
                        <span class="pub-author">Published on {{ $xDate }} by {{ $xAuthor }}</span>
                        <hr>

                        <h4>{{ $xTitle }}</h4>
                        <p><?=$xDesc?></p>
                    </article>

@stop
