<?php
  header("Content-type: text/xml");
  echo '<?xml version="1.0" encoding="utf-8" ?>' . "\n";
  $dt = date('Y-m-d');
?>
<feed xmlns="http://www.w3.org/2005/Atom">
  <title>Metaist</title>
  <link rel="self" href="//metaist.com/show-me-progress/feed" />
  <updated><?php echo $dt?>T00:00:00+00:00</updated>
  <author>
    <name>The Metaist</name>
  </author>
  <id>tag:metaist.com,2014:show-me.progress</id>
  <entry>
    <title>Show Me Progress: <?php echo $dt?></title>
    <link href="//metaist.com/show-me-progress" />
    <link rel="alternate" type="text/html" href="//metaist.com/show-me-progress"/>
    <id>tag:metaist.com,2014:show-me-progress-<?php echo sha1($dt); ?></id>
    <published><?php echo $dt?>T00:00:00+00:00</published>
    <updated><?php echo $dt?>T00:00:00+00:00</updated>
    <author>
      <name>The Metaist</name>
    </author>
    <content type="html">&lt;p&gt;Click &quot;Reply&quot; and answer these questions about your goal:&lt;/p&gt;&lt;ol&gt;
  &lt;li&gt;What did you do yesterday?&lt;br /&gt;&lt;br /&gt;&lt;/li&gt;
  &lt;li&gt;What will you do today?&lt;br /&gt;&lt;br /&gt;&lt;/li&gt;
  &lt;li&gt;What are obstacles to being done on-time?&lt;br /&gt;&lt;br /&gt;&lt;/li&gt;
&lt;/ol&gt;</content>
  </entry>
</feed>
