EnhanceMyCodeBundle
===================

This is a Symfony Bundle. The Bundle manages source code, especially 'community' source code, like paste-it services.
First of all, it allows people to post their code, with nice indentation, nice color, basically, probably [Pygments](http://pygments.org/) or some personnal color choice.
Secondly, people can browse/search/view the sources posted.
And lastly, people can comment to improve the code, with a vote system to organize code based on factors such as *usefulness*, *easy-to-read*, *interesting-concept*, anything.

Features (as of today)
======================
 * Display snippets posted
 * Comment snippets
 * Tag snippets
 * Search snippets based on 
    * Name/Description/Tags
    * Code
    * Types of input/output variables : ``[integer, integer] -> [integer]`` for (+,-,*,/) operations, for example. typespec annotations, QuickCheck property.


Techniques
==========
 * Post Entity (Comments are actual posts)
    * Title ``string``
    * Description ``string``
    * Date ``date``
    * InResponseTo ``Post`` [1-?]
    * (Author ``User``)
    * Code ``Code`` [1-1]
    * Tags ``Tag`` [1-N]
    * VotePlus ``integer``
    * VoteMinus ``integer``
    * EnjoymentPossibilites ``EnjoymentFactor`` [1-N]
 * Code Entity
    * Code ``text``
    * CodeDescriptions ``CodeDescriptor`` [1-N] in case the code is composed of more than one interesting functions
 * CodeDescriptor Entity (ways to find the code)
    * Code ``Code`` [1-1]
    * TypesIn ``Enumeration of possible string``
    * TypesOut ``Enumeration of possible string``
 * Tag Entity
    * Name ``string``
 * EnjoymentFactor Entity
    * Title ``Enumeration of possible string``
    * VotePlus ``integer``
    * VoteMinus ``integer``


Requirements
============
 * Symfony


Any ideas ? Enhancements ?
==========================
Feel free to tell me, or fork and pull request me :).
