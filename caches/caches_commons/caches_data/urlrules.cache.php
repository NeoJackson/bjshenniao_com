<?php
return array (
  1 => '{$categorydir}{$catdir}/index.html|{$categorydir}{$catdir}/{$page}.html',
  6 => 'index.php?m=content&c=index&a=lists&catid={$catid}|index.php?m=content&c=index&a=lists&catid={$catid}&page={$page}',
  11 => '{$catdir}/{$month}{$day}_{$id}.html|{$catdir}/{$month}{$day}_{$id}_{$page}.html',
  12 => '{$categorydir}{$catdir}/{$month}{$day}_{$id}.html|{$categorydir}{$catdir}/{$month}{$day}_{$id}_{$page}.html',
  16 => 'index.php?m=content&c=index&a=show&catid={$catid}&id={$id}|index.php?m=content&c=index&a=show&catid={$catid}&id={$id}&page={$page}',
  17 => 'show-{$catid}-{$id}-{$page}.html',
  18 => 'content-{$catid}-{$id}-{$page}.html',
  30 => 'list-{$catid}-{$page}.html',
  31 => '{$categorydir}_{$catdir}/{$year}_{$month}_{$day}_{$id}.html',
);
?>