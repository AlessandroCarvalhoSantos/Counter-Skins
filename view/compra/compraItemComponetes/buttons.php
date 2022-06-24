
<div class="d-flex justify-content-center mt-3">
    <form method="POST">
    <input type="hidden" name="codItem" value="<?=$id?>">
        <button type="submit" formaction="<?=$this->variablePath. "controller/compra/compraItemSaldo.php"?>" class="btn btn-outline-warning fw-bold px-4 me-1">Saldo</button>
        <button type="submit" formaction="<?=$this->variablePath. "controller/compra/compraDinheiro.php"?>" class="btn btn-outline-success fw-bold px-3">Dinheiro</button>
    </form>
</div>