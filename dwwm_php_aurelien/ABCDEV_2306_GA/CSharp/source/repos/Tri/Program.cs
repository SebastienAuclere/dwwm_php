namespace Tri
{
    internal class Program
    {
        static void Main(string[] args)
        {
            double a;
            double b;
            double c;
            string saisie;

            Console.WriteLine("Saisir le nombre a");
            saisie = Console.ReadLine();
            a = int.Parse(saisie);

            Console.WriteLine("Saisir le nombre b");
            saisie = Console.ReadLine();
            b = int.Parse(saisie);

            Console.WriteLine("Saisir le nombre c");
            saisie = Console.ReadLine();
            c = int.Parse(saisie);

            if (a < b && b < c)
                Console.WriteLine(a + " < " + b + " < " + c);
            else if (a < c && c < b)
                Console.WriteLine(a + " < " + c + " < " + b);
            else if (b < a && a < c)
                Console.WriteLine(b + " < " + a + " < " + c);
            else if (b < c && c < a)
                Console.WriteLine(b + " < " + c + " < " + a);
            else if (c < a && a < b)
                Console.WriteLine(c + " < " + a + " < " + b);
            else if (c < b && b < a)
                Console.WriteLine(b + " < " + a + " < " + c);
            else
                Console.WriteLine("Au moins deux nombres sont identiques");
        }
    }
}