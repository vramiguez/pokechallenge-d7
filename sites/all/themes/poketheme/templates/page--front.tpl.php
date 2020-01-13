<div id="page-wrapper"><div id="page">

  <div id="header" class="<?php print $secondary_menu ? 'with-secondary-menu': 'without-secondary-menu'; ?>"><div class="section clearfix">

      <h1 class="title">Pokemon Challenge </h1>

      <div id="main-menu" class="navigation">
        <ul><li><a href="#favorites">My Favorites</a></li></ul>
      </div> <!-- /#main-menu -->

  </div></div> <!-- /.section, /#header -->

  <?php if ($messages): ?>
    <div id="messages"><div class="section clearfix">
      <?php print $messages; ?>
    </div></div> <!-- /.section, /#messages -->
  <?php endif; ?>

  <div id="main-wrapper" class="clearfix"><div id="main" class="clearfix">

    <div id="content" class="columns columns-12"><div class="section">
      <a id="main-content"></a>

      <?php if ($tabs): ?>
        <div class="tabs">
          <?php print render($tabs); ?>
        </div>
      <?php endif; ?>
      <?php print render($page['help']); ?>

      <?php if (isset($page['content']['pokelist'])): ?>
        <div class="pokelist-display">
          <div class="instructions">
            Welcome to the comparison tool of Pookemon. Here are some instructions to start using it:
            <ol>
              <li>Select the first pokemon that you want to compare</li>
              <li>Select a second pokemon to compare</li>
              <li>Review the information of the pokemon in the comparison table</li>
              <li>Select your favorite pokemons. Remember that you have up to 10 to select</li>
              <li>If you reach the limit of favorites, you won't be able to add more. However, you can always delete pokemons from your list</li>
              <li>Last: Enjoy!!</li>
            </ol>
          </div>

          <div class="general-container">
            <div class="Middle">
                <div>
                    <div id="btnContainer" style="--grid-rows:12; --grid-cols:12;">
                      <?php print render($page['content']['pokelist']); ?>
                    </div>
                </div>
            </div>
            <div class="Right">
                <div class="pokemon-list" id="pokemonList">
                    <div class="pokemon" id="pokemon_1">
                        <table border ="1" align ="center">
                            <tr>
                                <th colspan="2">
                                    First Pokemon
                                </th>
                            </tr>
                            <tr>
                                <td  class="poke-img" colspan="2">
                                    <img src =""/>
                                </td>
                            </tr>
                             <tr>
                                 <td>
                                    Name
                                </td>
                                <td>
                                    <p id="name_1"></p>
                                </td>
                             </tr>
                             <tr>
                                 <td>
                                    Abilities
                                </td>
                                <td>
                                    <p id="abilities_1"></p>
                                </td>
                             </tr>
                             <tr>
                                 <td>
                                    Types
                                </td>
                                <td>
                                    <p id="type_1"></p>
                                </td>
                             </tr>
                        </table>
                        <input type="hidden" name="firstname"  id="textFirst">
                    </div>
                    <div class="vs">
                        Vs
                    </div>
                    <div class="pokemon" id="pokemon_2">
                        <table border ="1" align ="center">
                            <tr>
                                <th colspan="2">
                                   Second Pokemon
                                </th>
                            </tr>
                            <tr>
                                <td class="poke-img" colspan="2">
                                    <img src =""/>
                                </td>
                            </tr>
                             <tr>
                                 <td>
                                    Name
                                </td>
                                <td>
                                    <p id="name_2"></p>
                                </td>
                             </tr>
                             <tr>
                                 <td>
                                    Abilities
                                </td>
                                <td>
                                    <p id="abilities_2"></p>
                                </td>
                             </tr>
                             <tr>
                                 <td>
                                    Types
                                </td>
                                <td>
                                    <p id="type_2"></p>
                                </td>
                             </tr>
                        </table>
                        <input type="hidden" name="firstname"  id="textSecond" >
                    </div>
                    <div>
                        <div id="favorites">
                            <div id ="ajax-favorites"></div>
                            <div><?php if (isset($page['favorites'])): print render($page['favorites']); endif; ?></div>
                            <input type="hidden" value = "0" name="firstname"  id="totalPokemons" >
                            <div id ="ajax-removal"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        </div>
      <?php endif; ?>




      <?php print render($page['content']); ?>
    </div></div> <!-- /.section, /#content -->

  </div></div> <!-- /#main, /#main-wrapper -->

</div></div> <!-- /#page, /#page-wrapper -->
