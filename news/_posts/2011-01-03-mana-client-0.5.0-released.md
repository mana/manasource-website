---
layout: post
title: Mana client 0.5.0 released
author: Thorbjørn Lindeijer
---

It's been a while since our two beta releases, and since then a lot
additional fixes went in for the release. However, there has also been
further development on manaserv, our own server project, which eventually
led to incompatibilities that took some major changes to the client. These
changes are too large and unfinished to go into a stable client release,
hence we're releasing a 0.5.0 version now. This version is half of what we
wanted 1.0 to be. It has everything 1.0 was going to have, except support
for manaserv.

The most active developer since 1.0.0-beta2 was Stefan Dombrowski, who
literally went on a fixing spree. Several others also contributed fixes and
improvements, which is detailed in the <a
href="http://files.manasource.org/mana-0.5.0-shortlog.txt">shortlog</a>.
Apart from fixes, this release also introduces support for an away mode
(/away command), an option to disable transparency for slow CPUs, proper
support for servers that don't allow registration from the client and the
replacement of the autoconf build system with CMake.

Since the last stable release of The Mana World (0.0.29.1), from which
this project continued, the changes are major. A summary of them can be
found in the <a
href="http://gitorious.org/mana/mana/blobs/raw/0.5/NEWS">NEWS file</a>.
