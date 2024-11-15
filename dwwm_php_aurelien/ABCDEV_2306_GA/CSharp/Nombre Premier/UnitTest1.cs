namespace TestPremier
{
    [TestClass]
    public class UnitTest1
    {
        [TestMethod]
        public void TestMethod1()
        {
            int j = NombrePremier.Program.Nbpremier(1);
            Assert.AreNotEqual(0, j);
        }

        [TestMethod]
        public void TestMethod2()
        {
            int j = NombrePremier.Program.Nbpremier(2);
            Assert.AreEqual(0, j);
        }

        [TestMethod]
        public void TestMethod3()
        {
            int j = NombrePremier.Program.Nbpremier(0);
            Assert.AreNotEqual(0, j);
        }

        [TestMethod]
        public void TestMethod4()
        {
            int j = NombrePremier.Program.Nbpremier(-1);
            Assert.AreNotEqual(0, j);
        }

        [TestMethod]
        public void TestMethod5()
        {
            int j = NombrePremier.Program.Nbpremier(3);
            Assert.AreEqual(0, j);
        }

        [TestMethod]
        public void TestMethod6()
        {
            int j = NombrePremier.Program.Nbpremier(4);
            Assert.AreNotEqual(0, j);
        }

        [TestMethod]
        public void TestMethod7()
        {
            int j = NombrePremier.Program.Nbpremier(5);
            Assert.AreEqual(0, j);
        }
    }
}