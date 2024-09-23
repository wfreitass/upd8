select * from representante as r 
	inner join cidades as c ON r.cidade_id = c.id 
  inner join clientes as cl ON c.id = cl.cidade_id
  where cl.id = 2;
  
select * from representante as r 
	inner join cidades as c ON r.cidade_id = c.id 
  where c.id = 1;