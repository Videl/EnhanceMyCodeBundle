PublishMyCodeBundle
===================

This is a Symfony Bundle. The Bundle manages source code, especially 'community' source code, like paste-it services.
First of all, it allows people to post their code, with nice indentation, nice color, basically, probably [Prettify](https://code.google.com/p/google-code-prettify/) or some personnal color choice.
Secondly, people can browse/search/view the sources posted.
And lastly, it is for one language : Erlang.

Features (as of today)
----------------------
 * Read/write snippets


Techniques
----------
 * Post Entity (Comments are actual posts)
    * Titre ``string``
    * Description ``string``
    * Date ``date``
    * ResponseTo ``Post`` [1-1]
    * Code ``Code`` [1-1]
 * Code Entity
    * Code ``text``

