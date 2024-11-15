using System;
using System.Runtime.CompilerServices;

namespace AppPoint
{
    public class Program
    {
        static void Main(string[] args)
        {
            Point p = new Point(10,0);
            p.Deplacer(5,5);
            Console.WriteLine(p.ToString());

            Point p2 = new Point(10,0);
            p2.Permuter();
            Console.WriteLine(p2);
        }
    }
}