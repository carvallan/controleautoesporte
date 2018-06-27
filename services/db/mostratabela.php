<?php	
/**	 *  Pesquisa um Registro pelo ID em uma Tabela	 */
function find( $table = null, $id = null ) {
  $database = open_database();
  $found = null;
  try {
    if ($id) {
      $sql = "SELECT * FROM " . $table . " WHERE id = " . $id;
      $result = $database->query($sql);
      if ($result->num_rows > 0) {
        $found = $result->fetch_assoc();
      }	
    } else {
      $sql = "SELECT * FROM "
        . $table;
      $result = $database->query($sql);
      if ($result->num_rows > 0) {
        $found = $result->fetch_all(MYSQLI_ASSOC);
        /* Metodo alternativo	      
        $found = array();
        while ($row = $result->fetch_assoc()) {	
        array_push($found, $row);	        } */
      }	
    }	
  } 
  catch (Exception $e) {
    $_SESSION['message'] = $e->GetMessage();
    $_SESSION['type'] = 'danger';
  }	
  close_database($database);
  return $found;	
}

<?php	
  /**	 *  Pesquisa Todos os Registros de uma Tabela
  */
  function find_all( $table ) {	
  return find($table);
}	