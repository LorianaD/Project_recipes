<form action="?action=add" method="POST">
  <label for="title">Titre de votre recette</label>
  <input type="text" name="title" required>

  <label for="category">Catégorie</label>
  <input type="text" name="category">

  <label for="prep_minutes">Temps de préparation (min)</label>
  <input type="number" name="prep_minutes" min="0" required>

  <label for="difficulty">Difficulté</label>
  <select name="difficulty">
    <option value="facile">Facile</option>
    <option value="moyen">Moyen</option>
    <option value="difficile">Difficile</option>
  </select>

  <label for="steps">Les étapes</label>
  <textarea name="steps" required></textarea>

  <!-- image si tu veux -->
  <!-- <input type="text" name="image"> -->

  <input type="submit" value="Ajouter">
</form>
