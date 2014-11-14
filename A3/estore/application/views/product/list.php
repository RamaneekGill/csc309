<h2>
  Catalogue
  <?php echo anchor('/add', 'Add new card'); ?>
</h2>

<table>
  <thead>
    <tr>
      <th>Name</th>
      <th>Description</th>
      <th>Price</th>
      <th>Photo</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php
      foreach ($products as $product) {
        echo "<tr>";
        echo "<td>" . $product->name . "</td>";
        echo "<td>" . $product->description . "</td>";
        echo "<td>" . $product->price . "</td>";
        echo "<td><img src='" . base_url() . "images/product/" . $product->photo_url . "' width='100px' /></td>";

        echo "<td class='table-actions'>";
        echo anchor("/delete/$product->id",'Delete',"onClick='return confirm(\"Do you really want to delete this record?\");'");
        echo anchor("/edit/$product->id",'Edit');
        echo anchor("/card/$product->id",'View');

        echo "Add to cart";
        echo "</td>";

        echo "</tr>";
      }
    ?>
  </tbody>
</table>

Admin:
Display all finalized orders
Delete all customer and order information
