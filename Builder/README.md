# 建造者模式
## 模式定义
将一个复杂对象的建造与调用者分离。调用者只需要给出指定对象的类型和内容,建造者模式负责按照顺寻创建复杂对象.

## 建造者模式的优势
易于解耦,将产品本身与创建的过程分离,可以使用相同的创建过程来创建不同的产品.
易于精确的控制对象，将复杂对象的创建划分在不同的方法中,创建过程更加清晰
易于扩展,增加新的建造者无需修改原来的类库

## 建造者模式的缺陷
建造者模式的产品具有较多的共同点，组成部分类似。如果产品之间差异较大,则不适合
如果产品的内部变化复杂,需要定义更多具体的建造者来配合,导致系统变的庞大

## 总结
建造者模式和抽象工厂模式很像，总体上，建造者模式仅仅只比抽象工厂模式多了一个“导演类”的角色。与抽象工厂模式相比，建造者模式一般用来创建更为复杂的对象，因为对象的创建过程更为复杂，因此将对象的创建过程独立出来组成一个新的类 —— 导演类。也就是说，抽像工厂模式是将对象的全部创建过程封装在工厂类中，由工厂类向客户端提供最终的产品；而建造者模式中，建造者类一般只提供产品类中各个组件的建造，而将完整建造过程交付给导演类。由导演类负责将各个组件按照特定的规则组建为产品，然后将组建好的产品交付给客户端。