namespace Inversion
{
    internal class Program
    {
        static void Main(string[] args)
        {
            int a;
            int b;
            int c;
            string saisie;

            Console.WriteLine("Saisir le nombre A");
            saisie = Console.ReadLine();
            a = int.Parse(saisie);

            Console.WriteLine("Saisir le nombre B");
            saisie = Console.ReadLine();
            b = int.Parse(saisie);

            c = a;
            a = b;
            b = c;

            Console.WriteLine("Les valeurs inversees de a et b valent maintenant " + a + " et " + b);
        }
    }
}