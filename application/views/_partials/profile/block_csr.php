<? if ($data['SkillData'] != false): ?>
    <strong>Competitive Skill Rank</strong>
    <div class="well well-large">
        <div class="pagination-centered">
                <? foreach ($data['SkillData'] as $csr): ?>
                        <span data-toggle="tooltop" title="<?= $csr['Playlist']; ?>" rel="tooltip" data-placement="top"> <img class="" src="<?= $csr['ImageUrl']; ?>" /></span>
                <? endforeach; ?>
        </div>
    </div>
    <script type="text/javascript">
        $(function () {
            $("[rel='tooltip']").tooltip();
        });
    </script>
<? endif; ?>