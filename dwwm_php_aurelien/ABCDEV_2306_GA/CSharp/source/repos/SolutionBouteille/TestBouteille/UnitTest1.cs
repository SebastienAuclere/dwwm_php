using ClassLibraryBouteille;

namespace TestBouteille
{
    [TestClass]
    public class UnitTest1
    {
        [TestMethod]
        public void TestMethod1()
        {
            Bouteille bouteilleTest = new Bouteille(500,false,500);

            bool peutEtreOuverte = bouteilleTest.Ouvrir();

            Assert.AreEqual(true, peutEtreOuverte);
        }
    }
}