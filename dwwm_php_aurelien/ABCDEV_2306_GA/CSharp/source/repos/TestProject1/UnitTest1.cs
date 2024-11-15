namespace TestProject1
{
    [TestClass]
    public class UnitTest1
    {
        [TestMethod]
        public void TestMethod1()
        {
           bool test = Palindrome.Program.LePalindrome("ponop");
           Assert.IsTrue(test);
        }

        [TestMethod]
        public void TestMethod2()
        {
            bool test = Palindrome.Program.LePalindrome("poop");
            Assert.IsTrue(test);
        }

        [TestMethod]
        public void TestMethod3()
        {
            bool test = Palindrome.Program.LePalindrome("ponp");
            Assert.IsFalse(test);
        }

        [TestMethod]
        public void TestMethod4()
        {
            bool test = Palindrome.Program.LePalindrome("p8p");
            Assert.IsTrue(test);
        }

        [TestMethod]
        public void TestMethod5()
        {
            bool test = Palindrome.Program.LePalindrome("boop");
            Assert.IsFalse(test);
        }

        [TestMethod]
        public void TestMethod6()
        {
            bool test = Palindrome.Program.LePalindrome("bobop");
            Assert.IsFalse(test);
        }
    }
}