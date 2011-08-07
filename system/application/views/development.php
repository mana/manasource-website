<div class="section">
    <div class="header">Development</div>
    <div class="body">

   <h3>Contact</h3>

    <p>We hang out on <b>irc.freenode.net</b> in the <b>#mana</b> channel
    and we're using a <a href="http://lists.manasource.org/">mailing list</a>
    to communicate outside of IRC (though mailing list membership has to be
    manually approved so that we don't have to face spam).</p>

    <h3>Task and bug tracker</h3>

    <p>We're using Mantis, at <a href="http://bugs.manasource.org/">http://bugs.manasource.org/</a>.</p>

    <h3>Git repositories</h3>

    <p>Available at <a href="http://github.com/mana">http://github.com/mana</a>.</p>

    <h3>Testing server</h3>

    <p>Running at <a href="http://testing.manasource.org">http://testing.manasource.org</a> on port 9601, at commits:</p>

<pre>
<?php
function repo_status($project, $dir)
{
    chdir($dir);
    $sha = exec('git log -1 --format=%H');
    echo "<b>$project</b> ";
    echo "<a href=\"http://github.com/mana/$project/commit/$sha\">$sha</a>";
    echo "\n";
}

repo_status('manaserv', '/home/mana/manaserv');
repo_status('manaweb', '/home/mana/manaweb');

//$manaserv_data_dir = '/home/mana/manaserv/server-data';
//$tmwdata_dir = '/home/mana/manaserv/data';
?>
</pre>

   </div>
</div>

