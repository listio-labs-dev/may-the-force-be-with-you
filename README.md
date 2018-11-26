# May The Force Be With You

#### "Without the midi-chlorians, life could not exist, and we would have no knowledge of the Force. They continually speak to us, telling us the will of the Force. When you learn to quiet your mind, you'll hear them speaking to you."
#### ―Qui-Gon Jinn, to Anakin Skywalker
---------------------------------------

As devs we use the force daily to accomplish miniscule tasks, but these task will one day help us because Jedi Masters.

The idea with this assessment is simple - to see your level of force and it tests a bit of laravel knowledge

- Install a clean version of Laravel
- Create your own branch on this repo
- Create a custom laravel package in the root of the Laravel installation as follows: <lrvl root>/acme/the-force
- Create a service provider for you package and wire into laravel installation (hint: composer.json and app/config) 
- Enhance your package to and create 2 routes contained with a routes file in your package that 
  - calls 2 urls - '/without-facade-override' and '/with-facade-override'
  - ALSO This means that that you do NOT use the laravel's routes/web.php file, but that your package need to have its own way of doing routes (hint: you can do it in your service provider)
- Enhance your package and implement a controller in your package with 2 methods for the previously defined package routes that:
  - need to pass data to two views (also contained in your package)
- Enhance you package and implement facade (in your package) called from your controller methods that
  - on one route displays text indicating the normal facade implementation was used
  - on the other route shows text indicating how the original implamentation of the facade was overriden
- Once you are happy commit ONLY THE PACKAGE CODE back to your created branch
