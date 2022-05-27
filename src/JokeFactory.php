<?php

namespace Jdlien\ChuckNorrisJokes;

class JokeFactory
{
    protected $jokes = [
        'Chuck Norris does not wear a condom. Because there is no such thing as protection from Chuck Norris.',
        "Chuck Norris' tears cure cancer. Too bad he has never cried.",
        'Chuck Norris counted to infinity... Twice.',
        "If you can see Chuck Norris, he can see you. If you can't see Chuck Norris you may be only seconds away from death.",
        "Chuck Norris sold his soul to the devil for his rugged good looks and unparalleled martial arts ability. Shortly after the transaction was finalized, Chuck roundhouse kicked the devil in the face and took his soul back. The devil, who appreciates irony, couldn't stay mad and admitted he should have seen it coming. They now play poker the second Wednesday of every month.",
        'When the Boogeyman goes to sleep at night he checks his closet for Chuck Norris.',
        "Chuck Norris built a time machine and went back in time to stop the JFK assassination. As Oswald shot, Chuck Norris met all three bullets with his beard, deflecting them. JFK's head exploded out of sheer amazement.",
        "Chuck Norris has already been to Mars; that's why there are no signs of life there.",
        "They once made a \"Chuck Norris\" brand toilet paper, but it wouldn't take shit from anybody.",
        "A blind man once stepped on Chuck Norris' shoe. Chuck replied, \"Don't you know who I am? I'm Chuck Norris!\" The mere mention of his name cured this man's blindness. Sadly the first, last, and only thing this man ever saw, was a fatal roundhouse delivered by Chuck Norris.",
        "Guns don't kill people. Chuck Norris kills People.",
        'There is no theory of evolution. Just a list of animals Chuck Norris allows to live.',
        'The chief export of Chuck Norris is Pain.',
        'The leading causes of death in the United States are: 1. Heart Disease 2. Chuck Norris 3. Cancer.',
        'Chuck Norris uses pepper spray to spice up his steaks.',
    ];

    public function __construct(array $jokes = null)
    {
        if ($jokes) {
            $this->jokes = $jokes;
        }
    }

    public function getRandomJoke()
    {
        return $this->jokes[array_rand($this->jokes)];
    }
}
