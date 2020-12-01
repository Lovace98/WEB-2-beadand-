<h2>
    Hírek, bejegyzések a cégről és munkatársakról
</h2>
<p>
<form method="post" action="<?= SITE_ROOT ?>hir">
    <label>Hír, bejegyzés írása</label><br>
    <textarea name="hir" id="hir"></textarea><br>
    <input type="submit"  value="Küldés">
</form>
<p><br><?php
        if(isset($viewData['uzenet'])){
            echo $viewData['uzenet']."<br>";
            echo $viewData['ido']."<br>";
            echo $viewData['login']."<br>";}?><br></p>