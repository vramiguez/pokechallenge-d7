

  function pinPokemon(id) {
      var texto = document.getElementById("textFirst");

      if (texto.value == null || texto.value == "") {
          selectPokemon(id, 1);
      } else {
          selectPokemon(id, 2);
      }
  }

  function selectPokemon(pokeid, num){
    fetch(`https://pokeapi.co/api/v2/pokemon/${pokeid}`)
        .then(function (response) {
            response.json()
                    .then(function (pokemon) {
                        getPokemonInfo(pokemon, num);
                    });
        })
        .catch();
  }

  function getPokemonInfo(pokemon, num) {

      let list = document.getElementById("pokemonList");

      let item = list.querySelector(`#pokemon_${num}`);

      let image = item.getElementsByTagName("img")[0];

      image.setAttribute("src", pokemon.sprites.front_default);

      let name = document.getElementById(`name_${num}`);

      name.textContent = pokemon.name;

      let abilities = document.getElementById(`abilities_${num}`);

      abilities.innerHTML = '';

      pokemon.abilities.forEach(function(ability){
          var list_node = document.createElement("li");
          var anAbility = document.createTextNode(ability.ability.name);
          list_node.appendChild(anAbility);
          abilities.appendChild(list_node);
      });

      let types = document.getElementById(`type_${num}`);

      types.innerHTML = '';

      pokemon.types.forEach(function(type){
          var list_node = document.createElement("li");
          var aType = document.createTextNode(type.type.name);
          list_node.appendChild(aType);
          types.appendChild(list_node);
      });

      let text = document.getElementById("textFirst");

      if (text.value == null || text.value == "") {

          text.value = pokemon.name;
          let text2 = document.getElementById("textSecond");
          text2.value = null;

      } else {

          let text = document.getElementById("textSecond");
          text.value = pokemon.name;
          let text2 = document.getElementById("textFirst");
          text2.value = null;
      }
  }

  function addFavorite(id){
    jQuery('#ajax-favorites').load(`node/ajax/${id}`);

  }

  function removeFavorite(nid, delta){
    jQuery('#ajax-removal').load(`node/ajax-removal/${nid}/${delta}`);

  }
