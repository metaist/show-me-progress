<?php
  header("Content-type: text/xml");
  echo '<?xml version="1.0" encoding="utf-8" ?>' . "\n";
  $dt = date('Y-m-d');
  
  $protocol = 'http';
  $H = $_SERVER['HTTPS'] || '';
  $XFP = $_SERVER['HTTP_X_FORWARDED_PROTO'] || '';
  if('on' == $H || 1 == $H || 'https' == $XFP) { $protocol = 'https'; }
  
  $BASE_HOST = $protocol . '://metaist.com';
  $BASE_URL = $BASE_HOST . '/show-me-progress';
?>
<feed xmlns="http://www.w3.org/2005/Atom">
  <title>Metaist</title>
  <link rel="self" href="<?php echo $BASE_HOST . $_SERVER['REQUEST_URI'];?>" />
  <updated><?php echo $dt?>T00:00:00+00:00</updated>
  <author>
    <name>The Metaist</name>
  </author>
  <id>tag:metaist.com,2014:show-me.progress</id>
  <entry>
    <title>Show Me Progress: <?php echo $dt?></title>
    <link href="<?php echo $BASE_URL;?>" />
    <link rel="alternate" type="text/html" href="<?php echo $BASE_URL;?>"/>
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
