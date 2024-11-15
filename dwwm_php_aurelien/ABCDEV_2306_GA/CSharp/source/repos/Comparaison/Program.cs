namespace Comparaison
{
    internal class Program
    {
        static void Main(string[] args)
        {
            int age;
            string saisie;

            Console.WriteLine("Saisir votre age");
            saisie = Console.ReadLine();
            age = int.Parse(saisie);

            if (age < 18)
                Console.WriteLine("Vous etes mineur");
            else
                Console.WriteLine("Vous etes majeur");
        }
    }
}