# May The Force Be With You

#### "Without the midi-chlorians, life could not exist, and we would have no knowledge of the Force. They continually speak to us, telling us the will of the Force. When you learn to quiet your mind, you'll hear them speaking to you."
#### ―Qui-Gon Jinn, to Anakin Skywalker
---------------------------------------

#### As devs we use the force daily to accomplish minuscule tasks in an effort to become Jedi Masters. ####

#### The idea is simple: let's see how much you can use the force to accomplish the items below. (PS: It also tests a bit of Laravel knowledge) ####

- On your machine install a clean version of Laravel
- Checkout the repo and create your own branch on this repo.
- Create a custom Laravel package in the root of the Laravel installation as follow: 
  - Create a folder: <lrvl root>/packages/acme/the-force along with its service provider
  - Wire the custom package's service provider into the Laravel installation (hint: composer.json and app/config) 
- Enhance your package by creating the package's own routes file that exposes 2 routes/urls - '/without-facade-override' and '/with-facade-override'
  - BEFORE YOU CONINUTE, STOP AND READ THIS QUICKLY: What I am trying to say is that you must NOT use the Laravel's routes/web.php file, but rather that your package need to have its own way of handling routes (hint: you can do it in your service provider)
- Enhance your package by creating a the package's own controller with 2 methods for the previously defined package routes need to pass data to two views (also contained in your package).
- Enhance you package by implementing a facade (in your package) with a method that is called from your controller methods that:
  - on the '/without-facade-override' route displays text indicating the normal facade implementation
  - on the ''/with-facade-override'' route shows text indicating how the original implementation of the facade underlying implementation swopped.
- Once you are happy commit ONLY THE PACKAGE CODE back to your github created branch (meaning the <lrvl root>/packages folder with everything underneath)
- Create a pull request back to master
  
  
 
