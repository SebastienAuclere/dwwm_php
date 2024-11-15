namespace TestProjectBarnabe
{
    [TestClass]
    public class UnitTest1
    {
        [TestMethod]
        public void TestMethod1()
        {
            int nbMagasin = BarnabeCourse.Program.visite(1);
            Assert.AreEqual(0, nbMagasin);
        }

        [TestMethod]
        public void TestMethod2()
        {
            int nbMagasin = BarnabeCourse.Program.visite(0.5);
            Assert.AreEqual(0, nbMagasin);
        }

        [TestMethod]
        public void TestMethod3()
        {
            int nbMagasin = BarnabeCourse.Program.visite(2);
            Assert.AreNotEqual(0, nbMagasin);
        }

        [TestMethod]
        public void TestMethod4()
        {
            int nbMagasin = BarnabeCourse.Program.visite(2);
            Assert.AreEqual(0, nbMagasin);
        }

        [TestMethod]
        public void TestMethod5()
        {
            int nbMagasin = BarnabeCourse.Program.visite(3);
            Assert.AreEqual(2, nbMagasin);
        }

        [TestMethod]
        public void TestMethod6()
        {
            int nbMagasin = BarnabeCourse.Program.visite(3);
            Assert.AreEqual(2, nbMagasin);
        }

        [TestMethod]
        public void TestMethod7()
        {
            int nbMagasin = BarnabeCourse.Program.visite(1.8);
            Assert.AreEqual(1, nbMagasin);
        }

    }
}