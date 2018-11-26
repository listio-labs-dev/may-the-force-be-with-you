# May The Force Be With You

#### "Without the midi-chlorians, life could not exist, and we would have no knowledge of the Force. They continually speak to us, telling us the will of the Force. When you learn to quiet your mind, you'll hear them speaking to you."
#### ―Qui-Gon Jinn, to Anakin Skywalker
---------------------------------------

#### As devs we use the force daily to accomplish miniscule tasks in an effor to become Jedi Masters. ####
#### The idea is simple: let's see how much you can use the force to accomplish the items below. (PS: It also tests a bit of Laravel knowledge) ####

- On your machine install a clean version of Laravel
- Checkout the repo and create your own branch of this repo.
- create a custom laravel package in the root of the Laravel installation as follow: <lrvl root>/packages/acme/the-force by creating a srivce provider and wire the package's Service provider into the Laravel installation (hint: composer.json and app/config) 
- Enhance your package by creating 2 routes in a routes file contained in your package that 
  - exposes 2 urls - '/without-facade-override' and '/with-facade-override'
  - BEFORE YOU CONINUTE - STOP AND READ THIS QUICKLY: What I am trying to say is that you must NOT use the laravel's routes/web.php file, but rather that your package need to have its own way of handling routes (hint: you can do it in your service provider)
- Enhance your package and implement a controller in your package with 2 methods for the previously defined package routes need to pass data to two views (also contained in your package).
- Enhance you package by implementing a facade (in your package) called from your controller methods that
  - on one route displays text indicating the normal facade implementation was used
  - on the other route shows text indicating how the original implamentation of the facade was overriden (underlying implementaiton swopped)
- Once you are happy commit ONLY THE PACKAGE CODE back to your github created branch (meaning the <lrvl root>/packages folder with everything underneath)
- Create a pull request back to master
  
  
 
