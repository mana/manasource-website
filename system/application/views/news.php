  
<div class="section">
    <div class="header">About The Mana Project</div>
    <div class="body">
    <p>The Mana project builds a complete 2D MMORPG platform. This includes a
    client, server and web component, as well as a library of free content that
    you can use under the terms of the GPL.</p>

    <p>While this project started in 2009, the Mana client, server and web
    components were formerly being developed as part of <a
     href="http://themanaworld.org/">The Mana World</a> since 2004. By
    separating server/client development from a single player community, we
    hope to achieve better cooperation with alternative Mana server based
    projects.</p>
    </div>
</div>

<div class="section">
    <div class="header">Recent News</div>
    <div class="body">

    <h3>Mana client 0.6.0 released</h3>

    <p>A lot has happened since our last feature release. Too much, in fact,
which is one of the reasons we plan to do more frequent releases in the future.
Mana 0.6 brings many improvements, small and large, for both players and
content developers.</p>

    <p>Many UI improvements have been made like scrolling tab bar (for when
your whispers don't fit), item search box in inventory/storage windows, display
of item quantity in shops, resizable update window, double-click to equip, etc.
Also, the application window is now dynamically resizable and no longer needs a
restart when switching between fullscreen and windowed mode (except on Windows
when using OpenGL). Many performance improvements have also been made, from
caching layered sprites to streaming music directly from the update archives.
The combat controls have also seen minor adjustments.</p>

    <p>On the content side, the client now supports customizable hit and attack
effects, and animated sprites for floor items and emotes. Improvements have
also been made to handling of hair colors and styles.</p>

    <p>The complete summary of the changes can be found in the <a
href="http://github.com/mana/mana/blob/master/NEWS">NEWS</a> file and the nitty
details can be found in the <a
href="http://manasource.org/files/mana-0.6.0-shortlog.txt">shortlog</a>. Thanks
to all who helped make this release possible!</p>

    <p>The client comes with updated translations to German, French and
Spanish. We hope to add more in patch releases, so don't hesitate to help
adding your favourite language! Contributions in any other form are also
welcome, you could even just help us decide what to work on for 0.7 or report
any issues you find on our <a href="http://bugs.manasource.org/">bug
tracker</a>. Mana is what you make it to be!</p>

    <p><i>Thorbjørn Lindeijer - February 12, 2012</i></p>

    <h3>Mana client 0.5.3 released</h3>

    <p>Another small bugfix release. See the <a
    href="http://manasource.org/files/mana-0.5.3-shortlog.txt">shortlog</a>
    for the details.</p>

    <p><i>Thorbjørn Lindeijer - September 11, 2011</i></p>

    <h3>Mana client 0.5.2 released</h3>

    <p>This is the second bugfix release since 0.5.0. One noticable adjustment
    is that trade NPCs will no longer spam the chat with a message for each
    bought or sold item. Also, the French and Finnish translations were
    updated. The full list of changes is detailed in the <a
    href="http://manasource.org/files/mana-0.5.2-shortlog.txt">shortlog</a>.
    </p>

    <p><i>Thorbjørn Lindeijer - April 16, 2011</i></p>

    <h3>Mana client 0.5.1 released</h3>

    <p>This is mainly a bugfix release, with some minor new features related
    to pickup notifications and supported tile map formats. Pasting under X11
    was fixed and some branding issues were resolved. Also, German, French,
    Russian and Brazilian Portuguese translations were updated.</p>

    <p>Thanks to all who have contributed to this release! As usual the <a
    href="http://manasource.org/files/mana-0.5.1-shortlog.txt">shortlog</a>
    provides the detailed list of changes.</p>

    <p><i>Thorbjørn Lindeijer - March 14, 2011</i></p>

    <h3>Mana client 0.5.0 released</h3>

    <p>It's been a while since our two beta releases, and since then a lot
    additional fixes went in for the release. However, there has also been
    further development on manaserv, our own server project, which eventually
    led to incompatibilities that took some major changes to the client. These
    changes are too large and unfinished to go into a stable client release,
    hence we're releasing a 0.5.0 version now. This version is half of what we
    wanted 1.0 to be. It has everything 1.0 was going to have, except support
    for manaserv.</p>

    <p>The most active developer since 1.0.0-beta2 was Stefan Dombrowski, who
    literally went on a fixing spree. Several others also contributed fixes and
    improvements, which is detailed in the <a
    href="http://manasource.org/files/mana-0.5.0-shortlog.txt">shortlog</a>.
    Apart from fixes, this release also introduces support for an away mode
    (/away command), an option to disable transparency for slow CPUs, proper
    support for servers that don't allow registration from the client and the
    replacement of the autoconf build system with CMake.<p>

    <p>Since the last stable release of The Mana World (0.0.29.1), from which
    this project continued, the changes are major. A summary of them can be
    found in the <a
    href="http://gitorious.org/mana/mana/blobs/raw/0.5/NEWS">NEWS file</a>.
    </p>

    <p><i>Thorbjørn Lindeijer - Jan 3, 2011</i></p>

    <h3>Mana client 1.0.0-beta2 released</h3>

    <p>One step closer to the first mana client release! There have been two
    months since our last beta release and we're still working hard to bring
    our best release ever.</p>

    <p>Thanks to all the feedback received, a total of 11 crashes have been
    fixed out of a total 41 bug fixes, and we're happy to release the
    <a href="http://manasource.org/downloads">second beta</a> of the Mana
    client. For a complete list of changes, please see the release
    <a href="http://manasource.org/files/mana-1.0.0-beta2-shortlog.txt"
    >changelog</a>.</p>

    <p>Found a bug? Feel free to
    <a href="http://bugs.manasource.org">report</a> it or simply talk to us on
    <a href="irc://irc.freenode.net/mana">irc</a>.</p>

    <p><i>Yohann Ferreira - Jun 1, 2010</i></p>

    <h3>Mana client 1.0.0-beta released</h3>

    <p>Almost half a year after we split off from <a
    href="http://themanaworld.org/">The Mana World</a> to develop the client
    and server independently from a single online world, we now present a
    preview of our first release in the form of this beta. The main purpose of
    the beta is to get final feedback towards the 1.0.0 release and to see
    whether projects based on Mana can successfully use this new version as
    their base.</p>

    <p>Compared to the last release of this software, then called The Mana
    World 0.0.29.1, a lot has changed. The biggest change is no doubt that both
    eAthena and the Mana server are now supported from the same binary. We hope
    to replace our aging eAthena version with the Mana server later. The other
    major change is that the client can pretend to be different games based on
    a "branding" file. Stuff like wallpaper, GUI skin and where to download the
    server list from can all be customized using this file. We hope other
    projects will use this as an opportunity to set themselves apart, while
    avoiding a split in the development of the client software.</p>

    <p>Too many other changes were made to mention them here. A summary can be
    found in the <a
    href="http://gitorious.org/mana/mana/blobs/raw/master/NEWS">NEWS file</a>.
    Go to the <a href="<?= site_url('downloads') ?>">downloads page</a> to get
    the release!</p>

    <p><i>Thorbjørn Lindeijer - Mar 16, 2010</i></p>

    <h3>The Mana Project Started!</h3>

    <p>Excuse the empty and sterile website, but we need to start somewhere!
    The Mana project launched, and is from now on an independent entity from
    our roots, <a href="http://themanaworld.org/">The Mana World</a>.</p>

    <p>There were several reasons to split off this project. One is to allow
    other servers/communities based on the same software to cooperate on an
    equal level. Depending on a piece of software should be much more
    acceptable for a game than depending on a different (but very similar)
    game. Another reason is that some developers are bothered by the demanding
    and growing player community or don't like the applied rules or politics.
    They shouldn't have to leave the development team because of this.
    Finally, the Mana project is not limited by the development of a single
    game, so there is more room for experimentation with new features or
    directions.</p>

    <p>It's expected to be a win for everyone, because at the same time it will
    allow <a href="http://themanaworld.org/">The Mana World</a> and other
    games based on the Mana platform to focus on what they do best: running a
    quality server with well developed content and focus on the player
    community.</p>

    <p><i>Thorbjørn Lindeijer - Oct 24, 2009</i></p>
    </div>
</div>
