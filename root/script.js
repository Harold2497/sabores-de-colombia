fetch("backend/menu.php")
  .then(res => res.json())
  .then(data => {
    const cont = document.getElementById("menu-container");
    data.forEach(plato => {
      cont.innerHTML += `
        <div>
          <h3>${plato.nombre}</h3>
          <p>${plato.descripcion}</p>
          <strong>Precio: $${plato.precio}</strong>
        </div>
      `;
    });
  });
