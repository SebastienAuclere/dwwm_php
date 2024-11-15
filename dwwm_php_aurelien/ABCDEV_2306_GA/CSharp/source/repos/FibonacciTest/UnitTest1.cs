namespace FibonacciTest
{
    [TestClass]
    public class UnitTest1
    {
        [TestMethod]
        public void TestMethod1()
        {
            int temp = Fibonacci.Program.LeFibonacci(11);
            Assert.AreEqual(89, temp);
        }

        [TestMethod]
        public void TestMethod2()
        {
            int temp = Fibonacci.Program.LeFibonacci(5);
            Assert.AreEqual(5, temp);
        }
    }
}