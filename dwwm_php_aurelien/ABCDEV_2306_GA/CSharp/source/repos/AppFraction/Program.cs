using System;
using System.Runtime.CompilerServices;

namespace AppFraction
{
    public class Program
    {
        static void Main(string[] args)
        {

            /* try
            {
                Fraction test1 = new Fraction(11, 0);
                test1.Reduire();
                Console.WriteLine(test1);
            }
            catch (Exception e) 
            {
                Console.WriteLine(e.Message);
            } */

            Fraction test1 = new Fraction(11, 2);
            Fraction test2 = new Fraction(12, 22);

            Console.WriteLine(test1.Plus(test2));
        }
    }
}