# May The Force Be With You

#### "Without the midi-chlorians, life could not exist, and we would have no knowledge of the Force. They continually speak to us, telling us the will of the Force. When you learn to quiet your mind, you'll hear them speaking to you."
#### ―Qui-Gon Jinn, to Anakin Skywalker
---------------------------------------

As devs we use the force daily to accomplish miniscule tasks, but these task will one day help us because Jedi Masters.

The idea with this assessment is simple - to see yuor level of force usage and it tests a bit of laravel knowledge

- Install La clean version of Laravel
- Create your own branch on this repo
- Create a custom laravel package in the root of the Laravel installation as follows: <lrvl root>/acme/the-force
- Create a service provider for you package and wire into laravel installation
- Create a controller in your package with the 2 routes that
  - calls 2 urls - '/without-facade-override' and '/with-facade-override'
  - need to feed data to two views also contained in your package
- Create a facade from within your package that
  - Displays 'this is without a facade' Override facade implemention (on one screen show this on another show overriding implementation)
- Once you are happy commit back to the branch
