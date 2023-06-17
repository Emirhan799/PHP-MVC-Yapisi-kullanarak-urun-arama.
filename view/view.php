<style>
.product-list {
  display: flex;
  flex-wrap: wrap;
}

.product-card {
  width: 200px;
  margin: 10px;
  padding: 15px;
  border: 2px solid #ccc;
  border-radius: 5px;
}
</style>

<div class="product-list">
    <?php if (empty($filteredProducts)): ?>
        <p>Ürün bulunamadı.</p>
    <?php else: ?>
        <?php foreach ($filteredProducts as $product): ?>
            <div class="product-card">
                <h3><?php echo $product['name']; ?></h3>
                <p><?php echo $product['description']; ?></p>
                <span><?php echo $product['price']; ?> TL</span>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</div>
